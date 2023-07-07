//ContactForm
import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class ContactForm extends JFrame {//JFrame - основной класс в Java Swing, у которого мы всё унаследовали
    JTextField name_field, email_field;
    JRadioButton male, female;
    JCheckBox check;
    public ContactForm(){
        super("Контактная форма");//название приложения
        this.setBounds(200, 100, 300,230);//как приложение будет располагаться по х и у и какая ширина и высота будет у самого приложения (200 пикселей отступ слева, 100 - сверху)(ширина - 250 пкс, высота - 100)
        super.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);//что будет, когда мы будем закрывать приложение (нажимать на крестик) (проект будет останавливаться)

        //Создаём "контейнер", в который будем помещать объекты
        Container container = super.getContentPane();
        container.setLayout(new GridLayout(5,2,2,10));//система расположения объектов (система сеток), указали сколько будет рядов(3), столбцов(2) и отступы между ними (по горизонтали 2, по вертикали 2)

        //Создадим текстовую надпись:
        JLabel name = new JLabel("Введите имя");
        name_field = new JTextField("", 1);//текстовая надпись + сколько колонок занимает поле (1)
        JLabel email = new JLabel("Введите email");
        email_field = new JTextField("@", 1);

        container.add(name);
        container.add(name_field);
        container.add(email);
        container.add(email_field);

        //Создаём кнопки
        //Радокнопки:
        male = new JRadioButton("Мужской");
        female = new JRadioButton("Женский");
        check = new JCheckBox("Согласен?", false); //конпка с галочкой (false значит, что изначально галочки нет)
        JButton send_button = new JButton("Отправить"); //конпка отправки

        male.setSelected(true);//изначально выбран мужскоц пол

        container.add(male);
        container.add(female);

        container.add(check);
        container.add(send_button);

        //Добавляем кнопки в одну группу, чтобы нельзя было одновременно выбрать и мужской пол и женский, а только одно значение
        ButtonGroup group = new ButtonGroup();
        group.add(male);
        group.add(female);

        group.add(check);
        group.add(send_button);

        //Действия после нажатия кнопки "отправить" (добавим всплывающее окно с информацией:
        //Создаём обработчик события
        send_button.addActionListener(new ButtonEventManager());//класс, который будет вызываться при нажатии на кнопку
    }
    class ButtonEventManager implements ActionListener{//вложенный класс

        @Override
        public void actionPerformed(ActionEvent e) {
            //получим все значения из всех полей в переменную
            String name = name_field.getText();//мы не можем обратиться к объекту, созданному в конструкторе, поэтому создаём его вне конструктора, а в конструкторе к нему обращаемся
            String email = email_field.getText();

            String isMale = "Мужской";
            if(!male.isSelected()){
                isMale = "Женский";
            }

            boolean checkBox = check.isSelected();

            //Создаём всплывающее окно
            JOptionPane.showMessageDialog(null, "Ваша почта: " + email + "\nВаш пол: " + isMale + "\nВы согласны? " + checkBox, "Привет" + name, JOptionPane.PLAIN_MESSAGE);
        }
    }
}
